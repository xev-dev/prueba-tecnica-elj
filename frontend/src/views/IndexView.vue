<script setup>
  import {ref, reactive, onMounted} from 'vue';
  import {TabulatorFull as Tabulator} from 'tabulator-tables'; 
  import {fetchDogs} from '@/api';
  import { useLoading } from 'vue-loading-overlay';
  const table = ref(null);
  const tabulator = ref(null); 
  const tableData = reactive([]);
  const loading = useLoading();
  const printColor = (cell) => {
    return "<div style='background-color:"+cell.getValue()+";width:80px;height:80px;margin-top:10px;margin-left:15px'></div>";
  }
  const printImg = (cell) => {
    return "<img style='width:80px;height:80px;margin-top:10px' src="+cell.getValue()+">";
  }
  const getBool = (cell) => {
    return cell.getValue() ? 'Si':'No';
  }
  onMounted(async() => {
      const loader = loading.show();
      tableData.value = await fetchDogs(); 
      tabulator.value = new Tabulator(table.value, {
        data: tableData.value, 
        reactiveData:true, 
        height:"80%",
        columns: [
            {title:'Imagen',field:'img', formatter:printImg},
            {title:'Raza',field:'race'},
            {title:'Edad',field:'age'},
            {title:'Color del pelo',field:'color',formatter:printColor},
            {title:'Tamaño',field:'size'},
            {title:'¿Está castrado?',field:'castrated',formatter:getBool},
        ],
      });
      loader.hide(); 
  })
</script>

<template>
  <main>
    <h1>¡Tus perros registrados!</h1>
    <div ref="table"></div>
  </main>
</template>