<template>
  <div
    class="tab-pane fade active show"
    id="btabs-animated-fade-home"
    role="tabpanel"
    aria-labelledby="btabs-animated-fade-home-tab"
    tabindex="0"
  >
    <p class="fw-normal h5 question fw-bold">
      {{ currentQuestion.question }}
    </p>
    <div class="row">
      <div class="col px-1 pb-1">
        <textarea
          v-show="!isAnswerShowing"
          style="resize: none"
          rows="6"
          class="form-control d-none d-md-block"
          placeholder="Try to answer here or click the SHOW ANSWER button"
        ></textarea>
        <div class="d-flex justify-content-between align-items-center py-2">
          <div class="d-none d-md-block">
            <a href="#" class="link">How does it work?</a>
          </div>
          <div class="h2 p-0 m-0">
            <a
              href="#"
              :class="(prevQuestionsCount > 0 ? 'text-primary' : '') + 'p-1'"
              @click="prevAnswer($event)"
              ><i class="fa-solid fa-angle-left"></i
            ></a>
            <a
              href="#"
              :class="(nextQuestionsCount > 0 ? 'text-primary' : '') + 'p-1'"
              @click="nextAnswer($event)"
              ><i class="fa-solid fa-angle-right"></i
            ></a>
          </div>
          <div class="d-flex align-items-center">
            <div class="">
              <button
                class="btn btn-primary btn-sm"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#answer"
                aria-expanded="false"
                aria-controls="answer"
                @click="isAnswerShowing = !isAnswerShowing"
              >
                {{ !isAnswerShowing ? "SHOW ANSWER" : "HIDE ANSWER" }}
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-auto" v-show="!isAnswerShowing">
        <button class="btn"><i class="fa fa-sliders"></i></button>
      </div>
    </div>
    <div id="answer" class="collapse">
      <hr />
      <div><h4 class="fs-sm">ANSWER:</h4></div>
      <div v-html="currentQuestion.answer"></div>
    </div>
  </div>
</template>

<script>
import Qs from "./answers";

export default {
  data() {
    return {
      currentQuestionNum: 1,
      answer: "",
      isAnswerShowing: false,
      nextQuestionsCount: 5,
      prevQuestionsCount: 0,
      currentQuestion: {},
    };
  },
  mounted() {
    axios
      .get(window.location.href + `mcp/questions/${this.currentQuestionNum}`)
      .then((res) => {
        this.currentQuestion = res.data;
      });
  },
  methods: {
    showAnswer() {},
    nextAnswer(e) {
      e.preventDefault();
      this.currentQuestionNum++;
      axios
        .get(
          window.location.href + `mcp/questions/${this.currentQuestionNum}`
        )
        .then((res) => {
          this.currentQuestion = res.data;
        });
    },
    prevAnswer(e) {
      e.preventDefault();
      this.currentQuestionNum--;
      axios
        .get(
          window.location.href + `mcp/questions/${this.currentQuestionNum}`
        )
        .then((res) => {
          this.currentQuestion = res.data;
        });
    },
  },
};
</script>

<style>
</style>