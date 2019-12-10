<template>
    <div>
        <div class="form-group">
            <label for="manufacturer">メーカーを選択する</label>
            <select name="manufacturer" id="manufacturer" class="form-control" v-model="selected">
                <option
                    v-for="data in manufacturer_data"
                    :key="data.manufacturer_id"
                    :value="data.manufacturer_id"
                >{{ data.manufacturer_name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label for="bike">バイクを選択する</label>
            <select name="bike" id="bike" class="form-control">
                <option
                    v-for="data in bikes"
                    :key="data.bike_id"
                    :value="data.bike_id"
                >{{ data.bike_name }}</option>
            </select>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            selected: '',
            datas: [],
            manufacturer_data: [],
        };
    },
    computed: {
        bikes: function() {
            return this.datas.filter((item, index) => {
                if (item.manufacturer_id === this.selected ) {
                    return true;
                }
            })
        }
    },
    mounted() {
        axios.get("/custom/create/bike").then(response => {
            this.datas = response.data;
        });

        axios.get("/custom/create/manufacturer").then(res => {
            this.manufacturer_data = res.data;
        });
    },
    methods: {
        
    }
};
</script>

<style>
</style>