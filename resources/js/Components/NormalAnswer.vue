<template>
  <div
    class="tab-pane fade active show"
    id="btabs-animated-fade-home"
    role="tabpanel"
    aria-labelledby="btabs-animated-fade-home-tab"
    tabindex="0"
  >
    <p class="fw-normal h5 question fw-bold">
      <span class="bg-gray rounded-circle"
        ><img src="/media/question-icon.png" alt="Question Icon - Easy2Learn"
      /></span>
      {{ currentQuestion.question }}
    </p>
    <div class="row align-items-center">
      <div class="col-12 col-md px-1 pb-1">
        <textarea
          style="resize: none"
          rows="6"
          class="form-control"
          placeholder="Try to answer here or click the SHOW ANSWER button"
          v-show="!filter.hide_textarea"
        ></textarea>
        <div
          class="
            d-flex
            justify-content-center justify-content-md-between
            align-items-center
            py-2
            flex-wrap
          "
        >
          <div class="d-none d-md-block">
            <a href="/how-it-works" class="link">How does it work?</a>
          </div>
          <div
            class="
              h2
              p-0
              m-0
              col-12 col-md-1
              d-flex d-md-block
              justify-content-evenly
              align-items-center
            "
          >
            <a href="#" class="text-primary p-1" @click="prevAnswer($event)"
              ><i class="fa-solid fa-angle-left"></i
            ></a>
            <a
              href="#"
              :class="(nextQuestionsCount > 0 ? 'text-primary' : '') + 'p-1'"
              @click="nextAnswer($event)"
              ><i class="fa-solid fa-angle-right"></i
            ></a>
          </div>
          <div
            class="
              d-flex
              justify-content-center
              pt-4 pt-md-0
              align-items-center
            "
          >
            <div class="">
              <button
                class="btn btn-primary btn-sm"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#answer"
                aria-expanded="false"
                aria-controls="answer"
                @click="isAnswerShowing = !isAnswerShowing"
                v-show="!filter.hide_answers_button"
              >
                {{ !isAnswerShowing ? "SHOW ANSWER" : "HIDE ANSWER" }}
              </button>
            </div>
            <div
              class="col-auto d-md-none d-block"
              data-bs-toggle="modal"
              data-bs-target="#filter-modal"
              v-show="!isAnswerShowing"
            >
              <button class="btn"><i class="fa fa-sliders"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div
        class="col-auto d-none d-md-block"
        data-bs-toggle="modal"
        data-bs-target="#filter-modal"
        v-show="!isAnswerShowing"
      >
        <button class="btn btn-sm m-0"><i class="fa fa-sliders"></i></button>
      </div>
    </div>
    <div v-show="isAnswerShowing">
      <hr />
      <div><h4 class="fs-sm">ANSWER:</h4></div>
      <div v-html="currentQuestion.answer"></div>
    </div>
  </div>

  <div
    class="modal"
    id="filter-modal"
    tabindex="-1"
    aria-labelledby="filter-modal"
    style="display: none"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="block-rounded block-transparent block mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">
              <span><i class="fa fa-sliders"></i></span>
              Filter
              <!---->
            </h3>
            <div class="block-options space-x-1">
              <button
                type="button"
                class="btn-block-option"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <i class="fa fa-fw fa-times"></i>
              </button>
            </div>
          </div>
          <div class="block-content fs-sm">
            <!-- CONTENT  -->
            <div>
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <label class="form-check-label"
                      >Show random questions (otherwise incremental)</label
                    >
                  </div>
                  <div class="form-switch d-inline">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      @change="setFilterOption()"
                      v-model="filter.show_random_questions"
                    />
                  </div>
                </div>
              </div>
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <label class="form-check-label"
                      >Hide textarea (I don't want to write the answer)</label
                    >
                  </div>
                  <div class="form-switch d-inline">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      @change="setFilterOption()"
                      v-model="filter.hide_textarea"
                    />
                  </div>
                </div>
              </div>
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <label class="form-check-label">Hide answers button</label>
                  </div>
                  <div class="form-switch d-inline">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      @change="setFilterOption()"
                      v-model="filter.hide_answers_button"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="block-content block-content-full text-end bg-body">
            <button
              type="button"
              class="btn btn-sm btn-alt-secondary me-1"
              data-bs-dismiss="modal"
            >
              Close</button
            ><button
              type="button"
              class="btn btn-sm btn-primary"
              data-bs-dismiss="modal"
              @click="submitQuestion()"
            >
              Perfect
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Qs from "./answers";

export default {
  props: {
    filters: {
      required: true,
    },
  },
  data() {
    return {
      currentQuestionNum: 1,
      answer: "",
      isAnswerShowing: false,
      nextQuestionsCount: 5,
      prevQuestionsCount: 0,
      currentQuestion: {},
      allQuestionsCount: 0,
      filter: {},
    };
  },
  mounted() {
    axios
      .get(window.location.href + `mcp/questions/${this.currentQuestionNum}?random_question=${this.filter.show_random_questions}`)
      .then((res) => {
        this.currentQuestion = res.data.data;
        this.allQuestionsCount = res.data.count;
      });

    this.filter = this.filters;
  },
  methods: {
    showAnswer() {},
    nextAnswer(e) {
      this.isAnswerShowing = false;
      e.preventDefault();

      if (this.currentQuestionNum >= this.allQuestionsCount)
        this.currentQuestionNum = 1;

      this.currentQuestionNum++;
      axios
        .get(window.location.href + `mcp/questions/${this.currentQuestionNum}?random_question=${this.filter.show_random_questions}`)
        .then((res) => {
          this.currentQuestion = res.data.data;
        });
    },
    prevAnswer(e) {
      e.preventDefault();
      this.isAnswerShowing = false;
      this.$forceUpdate();
      this.currentQuestionNum--;
      if (this.currentQuestionNum < 1) this.currentQuestionNum = 1;
      axios
        .get(window.location.href + `mcp/questions/${this.currentQuestionNum}?random_question=${this.filter.show_random_questions}`)
        .then((res) => {
          this.currentQuestion = res.data.data;
        });
    },
    setFilterOption() {
      return {
        show_random_questions: true,
        hide_textarea: true,
        hide_answers_button: false,
        search_based_on: 'both',
      };

      axios
        .post(window.location.href + `mcp/user/filter`, {
          show_random_questions: this.filter.show_random_questions,
          hide_textarea: this.filter.hide_textarea,
          hide_answers_button: this.filter.hide_answers_button,
          search_based_on: this.filter.search_based_on,
        })
        .then((res) => {
          this.filter = res.data;
        });
    },
  },

  watch: {
    filters() {
      this.filter = this.filters;
    },
  },
};
</script>

<style>
</style>