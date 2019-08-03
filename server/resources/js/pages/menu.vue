
<template>
  <div style="width: 80%; margin: auto; font-size:0.8rem;">
    <div v-show="loading" id="loader"/>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark" v-show="!loading">
        <tr>
          <th scope="col" style="width: 25%;">セットメニュー</th>
          <th scope="col" style="width: 13%">料金</th>
          <th scope="col" style="width: 62%">備考</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="set_menu in set_menus">
          <td>{{ set_menu.name }}</td>
          <td>{{ set_menu.price | jpPrice}}円〜</td>
          <td>{{ set_menu.note }}</td>
        </tr>
      </tbody>
    </table>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark" v-show="!loading">
        <tr>
          <th scope="col" style="width: 25%;">カット</th>
          <th scope="col" style="width: 13%">料金</th>
          <th scope="col" style="width: 62%">備考</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="cut_menu in cut_menus">
          <td>{{ cut_menu.name }}</td>
          <td>{{ cut_menu.price | jpPrice}}円〜</td>
          <td>{{ cut_menu.note }}</td>
        </tr>
      </tbody>
    </table>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark" v-show="!loading">
        <tr>
          <th scope="col" style="width: 25%;">カラー</th>
          <th scope="col" style="width: 13%">料金</th>
          <th scope="col" style="width: 62%">備考</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="color_menu in color_menus">
          <td>{{ color_menu.name }}</td>
          <td>{{ color_menu.price | jpPrice}}円〜</td>
          <td>{{ color_menu.note }}</td>
        </tr>
      </tbody>
    </table>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark" v-show="!loading">
        <tr>
          <th scope="col" style="width: 25%;">パーマ</th>
          <th scope="col" style="width: 13%">料金</th>
          <th scope="col" style="width: 62%">備考</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="parm_menu in parm_menus">
          <td>{{ parm_menu.name }}</td>
          <td>{{ parm_menu.price | jpPrice}}円〜</td>
          <td>{{ parm_menu.note }}</td>
        </tr>
      </tbody>
    </table>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark" v-show="!loading">
        <tr>
          <th scope="col" style="width: 25%;">縮毛矯正</th>
          <th scope="col" style="width: 13%">料金</th>
          <th scope="col" style="width: 62%">備考</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="straight_menu in straight_menus">
          <td>{{ straight_menu.name }}</td>
          <td>{{ straight_menu.price | jpPrice}}円〜</td>
          <td>{{ straight_menu.note }}</td>
        </tr>
      </tbody>
    </table>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark" v-show="!loading">
        <tr>
          <th scope="col" style="width: 25%;">トリートメント</th>
          <th scope="col" style="width: 13%">料金</th>
          <th scope="col" style="width: 62%">備考</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="treatment_menu in treatment_menus">
          <td>{{ treatment_menu.name }}</td>
          <td>{{ treatment_menu.price | jpPrice}}円〜</td>
          <td>{{ treatment_menu.note }}</td>
        </tr>
      </tbody>
    </table>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark" v-show="!loading">
        <tr>
          <th scope="col" style="width: 25%;">ヘアセット</th>
          <th scope="col" style="width: 13%">料金</th>
          <th scope="col" style="width: 62%">備考</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="hair_set_menu in hair_set_menus">
          <td>{{ hair_set_menu.name }}</td>
          <td>{{ hair_set_menu.price | jpPrice}}円〜</td>
          <td>{{ hair_set_menu.note }}</td>
        </tr>
      </tbody>
    </table>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark" v-show="!loading">
        <tr>
          <th scope="col" style="width: 25%;">ヘッドスパ</th>
          <th scope="col" style="width: 13%">料金</th>
          <th scope="col" style="width: 62%">備考</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="head_spa_menu in head_spa_menus">
          <td>{{ head_spa_menu.name }}</td>
          <td>{{ head_spa_menu.price | jpPrice}}円〜</td>
          <td>{{ head_spa_menu.note }}</td>
        </tr>
      </tbody>
    </table>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark" v-show="!loading">
        <tr>
          <th scope="col" style="width: 25%;">その他のメニュー</th>
          <th scope="col" style="width: 13%">料金</th>
          <th scope="col" style="width: 62%">備考</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="other_menu in other_menus">
          <td>{{ other_menu.name }}</td>
          <td>{{ other_menu.price | jpPrice}}円〜</td>
          <td>{{ other_menu.note }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<style>
#loader {
  color: #0c6;
  font-size: 20px;
  margin: 100px auto;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  position: relative;
  text-indent: -9999em;
  -webkit-animation: load4 1.3s infinite linear;
  animation: load4 1.3s infinite linear;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}
@-webkit-keyframes load4 {
  0%,
  100% {
    box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
  }
  12.5% {
    box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
  }
  25% {
    box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
  }
  37.5% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
  }
  50% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
  }
  62.5% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
  }
  75% {
    box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
  }
  87.5% {
    box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
  }
}
@keyframes load4 {
  0%,
  100% {
    box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
  }
  12.5% {
    box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
  }
  25% {
    box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
  }
  37.5% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
  }
  50% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
  }
  62.5% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
  }
  75% {
    box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
  }
  87.5% {
    box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
  }
}
</style>

<script>
 export default {
        data() {
            return {
                set_menus: [],
                cut_menus: [],
                color_menus: [],
                parm_menus: [],
                straight_menus: [],
                treatment_menus: [],
                hair_set_menus: [],
                head_spa_menus: [],
                other_menus: [],
                loading: true
            }
        },
        created() {
            axios.get('/api/menu').then(response => {
                    this.set_menus = response.data.set_menus;
                    this.cut_menus = response.data.cut_menus;
                    this.color_menus = response.data.color_menus
                    this.parm_menus = response.data.parm_menus
                    this.straight_menus = response.data.straight_menus
                    this.treatment_menus = response.data.treatment_menus
                    this.hair_set_menus = response.data.hair_set_menus
                    this.head_spa_menus = response.data.head_spa_menus
                    this.other_menus = response.data.other_menus
                    this.loading = false;
                });
        },
        filters: {
          jpPrice: function (value) {
            return value.toLocaleString();
        }
      }
    }
</script>


