<template>
  <div>
    <PageHeader text="Students" desc="" />
  </div>

  <div class="col-sm-6 col-xxl-3">
    <div class="block-rounded block d-flex flex-column h-100 mb-0">
      <div
        class="
          block-content block-content-full
          flex-grow-1
          d-flex
          justify-content-between
          align-items-center
        "
      >
        <dl class="mb-0">
          <dt class="fs-3 fw-bold">{{registered}}</dt>
          <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">
            Registered Users
          </dd>
        </dl>
        <div class="item item-rounded-lg bg-body-light">
          <i class="far fa-user-circle fs-3 text-primary"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="block block-rounded mt-5">
    <div class="block-header block-header-default">
      <div class="block-title">Questions</div>
    </div>
    <div class="block-content">
        <div class="col-md-2">
            <select class="form-select" v-model="perPage" @change="fetchStudents()">
                <option :value="10">10</option>
                <option :value="25">25</option>
                <option :value="50">50</option>
                <option :value="100">100</option>
                <option :value="999">All</option>
            </select>
        </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>username</th>
              <th>email</th>
              <th>Created At</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="s in students" :key="s.id">
              <td>{{s.username}}</td>
              <td>{{s.email}}</td>
              <td>{{new Date(s.created_at).toLocaleString()}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
import PageHeader from "../../Components/PageHeader.vue";

export default {
  components: { PageHeader },
  data() {
    return {
        registered: 1,
        students: [],
        perPage: 10,
    };
  },
  async mounted() {
    this.fetchStudents();
    const response = await axios.get(window.location.origin + `/backend/students/count`);
    this.registered = response.data.count;
  },
  methods: {
    async fetchStudents() {
        const count = this.perPage * 1;
        const response = await axios.get(window.location.origin + `/backend/students?count=${count}`);
        
        this.students = response.data;
    }
  }
};
</script>

<style>
</style>