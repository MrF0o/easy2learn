<template>
  <div
    class="tab-pane fade active show"
    id="btabs-animated-fade-home"
    role="tabpanel"
    aria-labelledby="btabs-animated-fade-home-tab"
    tabindex="0"
  >
    <p class="fw-normal h5 question fw-bold">
      What are the advantages of using Easy2learn?
    </p>
    <div class="row">
      <div class="col px-1 pb-1">
        <textarea
          v-show="!isAnswerShowing"
          style="resize: none"
          rows="6"
          class="form-control"
          placeholder="Try to answer here or click the SHOW ANSWER button"
        ></textarea>
        <div class="d-flex justify-content-between align-items-center py-2">
          <div class="d-none d-md-block">
            <a href="#" class="link">How does it work?</a>
          </div>
          <div class="h2 p-0 m-0">
            <a href="#" class="text-primary p-1"
              ><i class="fa-solid fa-angle-left"></i
            ></a>
            <a href="#" class="link text-muted"
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
      <div>
        <p>With Easy2Learn:</p>
        <ol>
          <li>you learn your stuff 30% quicker</li>
          <li>you do not need an interrogator, the system interrogates you</li>
          <li>you can easily search for keywords</li>
          <li>you can share your notes with other students</li>
          <li>you save the planet (no waste of paper)</li>
        </ol>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      currentQuestionNum: 0,
      answer: "",
      isAnswerShowing: true,
      nextQuestions: 5,
      prevQuestionsNum: 0,
    };
  },
  methods: {
    showAnswer() {},
  },
};
</script>

<style>
</style>