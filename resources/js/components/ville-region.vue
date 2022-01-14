<template>
<div>
     <div class="form-group row">
        <label class="text-muted col-md-3">Région
            <span> (* obligatoire) </span>
        </label>
        <div class="col-md-5">
            <select v-model="region" @change="getregion_obj" class="form-select input-height" name="region">
                <option value="">Select...</option>
                <option v-for="region in regions" :key="region.id" :value="region.region">{{region.region}}</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="text-muted col-md-3">Ville
            <span> (* obligatoire) </span>
        </label>
        <div class="col-md-5">
            <select class="form-select input-height" name="ville">
                <option value="">Select...</option>
                <option v-for="ville in villes" v-if="region_id.id==ville.region" :key="ville.ville" :value="ville.ville">{{ville.ville}}</option>
            </select>
        </div>
    </div>
</div>
</template>

<script> 
    export default {
        data(){
            return {
            regions:[],
            villes:[],
            region:'',
            region_id:''
            }
        },
        created(){
            this.getvilles();
            this.getregions();
        },
        methods:{
            getvilles() {
                axios
                .get('/en/admin/villes')
                .then(resp => this.villes=resp.data)
            },
            getregions() {
                axios
                .get('/en/admin/regions')
                .then(resp => this.regions=resp.data)
            },
            getregion_obj() {
                this.region_id = this.regions.find(d => d.region == this.region);
            }
        }
    }
</script>
