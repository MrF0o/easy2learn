<template>
  <ul class="nav nav-tabs nav-tabs-pills justify-content-center" role="tablist">
    <li class="" role="presentation">
      <button
        class="nav-link active nav-pill text-white rounded m-1"
        id="btabs-animated-fade-home-tab"
        data-bs-toggle="tab"
        data-bs-target="#btabs-animated-fade-home"
        role="tab"
        aria-controls="btabs-animated-fade-home"
        aria-selected="true"
      >
        TEST EXAM
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button
        class="nav-link nav-pill text-white rounded m-1"
        id="btabs-animated-fade-profile-tab"
        data-bs-toggle="tab"
        data-bs-target="#btabs-animated-fade-profile"
        role="tab"
        aria-controls="btabs-animated-fade-profile"
        aria-selected="false"
        tabindex="-1"
      >
        SEARCH KEYWORD
      </button>
    </li>
  </ul>
  <div class="block-content tab-content overflow-hidden">
    <NormalAnswer :filters="filter" />
    <SearchKeyword :filters="filter" />
  </div>
</template>

<script>
import NormalAnswer from "./NormalAnswer.vue";
import SearchKeyword from "./SearchKeyword.vue";

export default {
  components: { NormalAnswer, SearchKeyword },
  data() {
    return {
      activeTab: {},
      filter: {}
    };
  },
  mounted() {
    this.filter = {
        show_random_questions: true,
        hide_textarea: true,
        hide_answers_button: false,
        search_based_on: 'both',
      };
  },
};
</script>

<style>
</style>