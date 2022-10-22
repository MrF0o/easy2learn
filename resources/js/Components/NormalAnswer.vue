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
      <div class="col-12 col-md px-1 pb-1">
        <textarea
          v-show="!isAnswerShowing"
          style="resize: none"
          rows="6"
          class="form-control"
          placeholder="Try to answer here or click the SHOW ANSWER button"
        ></textarea>
        <div class="d-flex justify-content-center justify-content-md-between align-items-center py-2 flex-wrap">
          <div class="d-none d-md-block">
            <a href="/how-it-works" class="link">How does it work?</a>
          </div>
          <div class="h2 p-0 m-0 col-12 col-md-1 d-flex d-md-block justify-content-evenly align-items-center">
            <a
              href="#"
              class="text-primary p-1"
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
          <div class="d-flex justify-content-center pt-4 pt-md-0 align-items-center">
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
            <div class="col-auto d-md-none d-block" v-show="!isAnswerShowing">
              <button class="btn"><i class="fa fa-sliders"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-auto d-none d-md-block" v-show="!isAnswerShowing">
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
      allQuestionsCount: 0,
    };
  },
  mounted() {
    axios
      .get(window.location.href + `mcp/questions/${this.currentQuestionNum}`)
      .then((res) => {
        this.currentQuestion = res.data.data;
        this.allQuestionsCount = res.data.count;
      });
  },
  methods: {
    showAnswer() {},
    nextAnswer(e) {
      e.preventDefault();

      if (this.currentQuestionNum >= this.allQuestionsCount)
        this.currentQuestionNum = 1;

      this.currentQuestionNum++;
      axios
        .get(window.location.href + `mcp/questions/${this.currentQuestionNum}`)
        .then((res) => {
          this.currentQuestion = res.data.data;
        });
    },
    prevAnswer(e) {
      e.preventDefault();
      this.currentQuestionNum--;
      if (this.currentQuestionNum < 1) this.currentQuestionNum = 1;
      axios
        .get(window.location.href + `mcp/questions/${this.currentQuestionNum}`)
        .then((res) => {
          this.currentQuestion = res.data.data;
        });
    },
  },
};
</script>

<style>
</style>