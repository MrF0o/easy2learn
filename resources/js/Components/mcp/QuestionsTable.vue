<template>
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-vcenter">
      <thead class="">
        <tr>
          <th>-</th>
          <th>Question</th>
          <th>Actions</th>
        </tr>
      </thead>
      <draggable v-model="questions" tag="tbody" item-key="id" @change="dragEnd()">
        <template #item="{ element }">
          <tr>
            <td><i class="fa-solid fa-grip-lines"></i></td>
            <td>{{ element.question }}</td>
            <td class="text-center">
              <div class="btn-group">
                <button
                  class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
                >
                  <i class="fa fa-fw fa-pencil-alt"></i>
                </button>
                <button
                  class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
                  @click="deleteQ(element.id)"
                >
                  <i class="fa fa-fw fa-times"></i>
                </button>
              </div>
            </td>
          </tr>
        </template>
      </draggable>
    </table>
  </div>
</template>

<script>
import axios from "axios";
import Draggable from "vuedraggable";

export default {
  components: {
    Draggable,
  },
  props: {
    items: {
      required: true,
    },
  },

  data() {
    return {
      questions: this.items,
    }
  },
  methods: {
    dragEnd(item) {
      axios.post(window.location.href + "/sort", {
        questions: this.questions,
      });
    },
    async deleteQ(id) {
      const data = (await axios.post(window.location.href + "/delete", {
        id,
      })).data;

      this.questions = data;
    },
  },
  watch: {
    items() {
      this.questions = this.items
    }
  }
};
</script>

<style>
</style>