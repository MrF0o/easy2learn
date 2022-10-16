<template>
  <div class="table-responsive">
    <table class="block table table-bordered table-striped table-vcenter">
      <thead class="">
        <tr>
          <th>-</th>
          <th>Question</th>
          <th>Actions</th>
        </tr>
      </thead>
        <draggable v-model="items" tag="tbody" item-key="id">
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
                  >
                    <i class="fa fa-fw fa-times"></i>
                  </button>
                </div>
              </td>
            </tr>
          </template>
        </draggable>

        <!-- <draggable :list="items" tag="tbody"> </draggable>
        <tr v-for="i in items" :key="i.id">
          <td><i class="fa-solid fa-grip-lines"></i></td>
          <td>{{ i.question }}</td>
          <td class="text-center">
            <div class="btn-group">
              <button
                class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
              >
                <i class="fa fa-fw fa-pencil-alt"></i>
              </button>
              <button
                class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"
              >
                <i class="fa fa-fw fa-times"></i>
              </button>
            </div>
          </td>
        </tr> -->
    </table>
  </div>
</template>

<script>
import Draggable from "vuedraggable";

export default {
  components: { 
    Draggable
   },
  props: {
    items: {
      required: true,
    },
  },
};
</script>

<style>
</style>