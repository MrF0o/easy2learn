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
          <button
            type="button"
            class="btn bg-gray rounded"
            @click="searchAnswer()"
          >
            <i class="fa fa-search"></i>
          </button>
          <div
            class="col-auto d-none d-md-block"
            data-bs-toggle="modal"
            data-bs-target="#search-filter-modal"
          >
            <button class="btn"><i class="fa fa-sliders"></i></button>
          </div>
        </div>
        <p class="fs-xs text-muted">
          Search for "advantage"" , "pricing" or any other keyword
        </p>
      </div>
      <div class="alert alert-primary alert-dismissible" v-if="message">
        {{message}}
      </div>
    </div>
    <div v-show="questions.length">
      <div class="fw-bold fs-sm my-2">
        <u>{{ questions.length }} RESULTS</u>
      </div>
      <div class="result" v-for="q in questions" :key="q.id">
        <h4 v-html="q.question"></h4>
        <div v-html="q.answer"></div>
      </div>
    </div>
  </div>

  <div
    class="modal"
    id="search-filter-modal"
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
            <form>
              <div>
                <div>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div>
                      <label class="form-check-label"
                        >Search for keywords in QUESTION and ANSWER</label
                      >
                    </div>
                    <div class="form-check d-inline">
                      <input
                        type="radio"
                        class="form-check-input"
                        v-model="filter.search_based_on"
                        name="search-both"
                        value="both"
                      />
                    </div>
                  </div>
                </div>
                <div>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div>
                      <label class="form-check-label"
                        >Search for keywords in QUESTION only</label
                      >
                    </div>
                    <div class="form-check d-inline">
                      <input
                        type="radio"
                        class="form-check-input"
                        v-model="filter.search_based_on"
                        name="search-question"
                        value="question"
                      />
                    </div>
                  </div>
                </div>
                <div>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div>
                      <label class="form-check-label"
                        >Search for keywords in ANSWER</label
                      >
                    </div>
                    <div class="form-check d-inline">
                      <input
                        type="radio"
                        class="form-check-input"
                        v-model="filter.search_based_on"
                        name="search-answer"
                        value="answer"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </form>
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
import provider from "../AnswerProvider";

export default {
  props: {
    filters: {
      required: true,
    },
  },
  data() {
    return {
      questions: [],
      search: null,
      filter: {
        search_based_on: "both",
      },
      message: null,
    };
  },
  methods: {
    clear() {
      this.search = "";
      this.questions = [];
    },
    async searchAnswer() {

      if (!this.search) {
        this.message = 'Please provide a search keyword!';
        return;
      }


      this.questions = await provider.search(
        this.search,
        this.filter.search_based_on
      );

      if (this.questions.length === 0) {
        this.message = 'No results found.';
        return;
      }


      this.message = null;
    },
    setFilterOption(option) {
      this.filter.search_based_on = option;
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