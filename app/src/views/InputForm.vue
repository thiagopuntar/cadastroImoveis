<template>
  <div class="about">
    <h1 class="mx-auto">{{ pageTitle }}</h1>
    <b-form @submit.prevent="save">
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

      <b-form-file 
        v-model="fotos"
        multiple
        placeholder="Selecione ou arraste as imagens do seu imóvel aqui"
        drop-placeholder="Arraste as imagens do seu imóvel aqui"
        accept="image/*"
      />
      
      <b-button class="mt-5 ml-3" type="submit" variant="primary">Salvar</b-button>
      <b-button class="mt-5 ml-4" type="submit" variant="outline-danger" @click="cancel">Cancelar</b-button>
      
    </b-form>
  </div>
</template>

<script>
import MyInput from '../components/MyInput.vue';
import ImovelService from '../services/ImovelService';

export default {
  components: {
    MyInput
  },
  data() {
    return {
      imovel: {},
      imovelService: new ImovelService(),
      fotos: []
    }
  },
  computed: {
    pageTitle() {
      return this.imovel.titulo || 'Novo Imóvel';
    }
  },
  methods: {
    save() {
      const fotos = this.fotos.map(foto => {
        return new FormData()
      })

      if (this.imovel.id) {
        this.imovelService.update(this.imovel)
          .then(imovel => {
            console.log(imovel);
          })
          .catch(err => {
            console.log('Erro ', err);
          });
      } else {
        this.imovelService.post(this.imovel)
          .then(imovel => {
            console.log(imovel);
          })
          .catch(err => {
            console.log('Erro ', err);
          });
      }
    },
    cancel() {
      
    }
  }
}
</script>
