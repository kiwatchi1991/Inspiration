<template>
  <div>
    <transition appear name="fade">
      <div class="c-flash" v-if="show">
        <div class="c-flash__inner error">
          <p class="c-flash__text">
            <img class="c-flash__img" src="/images/flash-check.svg" alt="チェック" />
            レビューの投稿に失敗しました
          </p>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>
export default {
  props: ["message"],
  data() {
    return {
      Message: this.message,
      show: false
    };
  },
  methods: {
    showSessionFlash() {
      setTimeout(() => {
        this.show = true;
      }, 1000);
      setTimeout(() => {
        this.show = false;
      }, 5000);
    }
  },
  mounted() {
    this.showSessionFlash();
  }
};
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: all 1s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
  transform: translateY(-20px);
}
</style>
