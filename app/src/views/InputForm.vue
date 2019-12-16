<template>
  <div class="about">
    <h1 class="mx-auto">{{ pageTitle }}</h1>
    <b-form @submit="save">
      <MyInput 
        label="Título:"
        v-model="imovel.titulo"
        class="my-3"
        autofocus
      />

      <b-form-textarea 
        placeholder="Descrição:"
        v-model="imovel.descricao"
        class="mb-3"
        rows=3
      />

      <MyInput 
        label="Endereço:"
        v-model="imovel.endereco"
        class="mb-3"
      />
    </b-form>
  </div>
</template>

<script>
import MyInput from '../components/MyInput.vue';

export default {
  components: {
    MyInput
  },
  data() {
    return {
      imovel: {
        fotos: []
      }
    }
  },
  computed: {
    pageTitle() {
      return this.imovel.titulo || 'Novo Imóvel';
    }
  },
  methods: {
    save() {

    }
  }
}
</script>
