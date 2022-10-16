<template>
  <div
    class="tab-pane fade"
    id="btabs-animated-fade-profile"
    role="tabpanel"
    aria-labelledby="btabs-animated-fade-profile-tab"
    tabindex="0"
  >
    <div class="row d-flex justify-content-center">
      <div class="col-lg-6 col-10 col-md-8">
        <div class="input-group">
          <input
            type="text"
            class="form-control"
            placeholder="Search..."
            v-model="search"
          />
          <button
            type="button"
            class="btn bg-transparent"
            style="margin-left: -40px; z-index: 100"
            @click="clear()"
          >
            <i class="fa fa-times"></i>
          </button>
          <button type="button" class="btn bg-gray rounded" @click="searchAnswer()">
            <i class="fa fa-search"></i>
          </button>
        </div>
        <p class="fs-xs text-muted">
          Search for "advantage"" , "pricing" or any other keyword
        </p>
      </div>
    </div>
    <div v-show="questions.length">
      <div class="fw-bold fs-sm my-2"><u>{{questions.length}} RESULTS</u></div>
      <div class="result" v-for="q in questions" :key="q.id">
        <h4 v-html="q.q"></h4>
        <div v-html="q.a"></div>
      </div>
    </div>
  </div>
</template>

<script>
import provider from '../AnswerProvider';

export default {
    data() {
        return {
            questions: [],
            search: 'advantages'
        }
    },
    methods: {
        clear() {
            this.search = ''
        },
        searchAnswer() {
            this.questions = provider.search(this.search);
        }
    }
};
</script>

<style>
</style>