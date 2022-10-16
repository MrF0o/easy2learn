<template>
  <div>
    <PageHeader text="Messages frontend" desc="on the website" />

    <div class="block block-rounded mt-5">
      <div class="block-header block-header-default">
        <div class="block-title">Questions</div>
        <div class="block-options">
          <button
            class="btn btn-info"
            data-bs-toggle="modal"
            data-bs-target="#add-question-modal"
          >
            <i class="fa fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="block-content">
        <QuestionsTable :items="questions"/>
      </div>
    </div>
  </div>
  <div
    class="modal"
    id="add-question-modal"
    tabindex="-1"
    aria-labelledby="add-question-modal"
    style="display: none"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="block-rounded block-transparent block mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">
              Add a question
              <!---->
            </h3>
            <div class="block-options space-x-1">
              <button
                type="button"
                class="btn-block-option"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <i class="fa fa-fw fa-times"></i></button
              ><!----><!----><!----><!---->
            </div>
          </div>
          <!----><!---->
          <div class="block-content fs-sm">
            <div class="pb-3">
              <input
                type="text"
                name=""
                id=""
                class="form-control form-control-alt"
                placeholder="Add your question here"
                v-model="q"
              />
            </div>

            <textarea id="js-ckeditor5-classic"></textarea>
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
import PageHeader from "../../Components/PageHeader.vue";
import QuestionsTable from "../../Components/mcp/QuestionsTable.vue";
import axios from 'axios';

export default {
  components: { PageHeader, QuestionsTable },
  data() {
    return {
        q: '',
        questions: []
    }
  },
  mounted() {
    axios.get(window.location.href + '/list').then(res => {
            this.questions = res.data;
    })
  },
  methods: {
    submitQuestion() {
        const answer = window.editor.data.get();
        axios.post(window.location.href + '/store', {
            q: this.q,
            a: answer
        }).then(res => {
            this.questions.push(res.data)
        }).catch(err => {
            
        })
    }
  }
};
</script>

<style>
</style>