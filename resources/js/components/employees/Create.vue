<template>
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Employee create Component
                        <router-link
                            :to="{name:'EmployeesIndex'}"
                            class="float-right"
                        >
                            Back
                        </router-link>
                    </div>

                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label
                                    for="department"
                                    class="col-md-4 col-form-label text-md-right"
                                >
                                    Department
                                </label>
                                <div class="col-md-6">
                                    <select
                                        id="country_id"
                                        class="form-control"
                                        arial-label="Default select example"
                                    >
                                        <option selected>
                                            Open this select menu
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="first_name"
                                    class="col-md-4 col-form-label text-md-right"
                                >
                                    First Name
                                </label>
                                <div class="col-md-6">
                                    <input
                                        type="text"
                                        id="first_name"
                                        class="form-control"
                                        required
                                    >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="last_name"
                                    class="col-md-4 col-form-label text-md-right"
                                >
                                    Last Name
                                </label>
                                <div class="col-md-6">
                                    <input
                                        type="text"
                                        id="last_name"
                                        class="form-control"
                                        required
                                    >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="address"
                                    class="col-md-4 col-form-label text-md-right"
                                >
                                    Address
                                </label>
                                <div class="col-md-6">
                                    <input
                                        type="text"
                                        id="address"
                                        class="form-control"
                                        required
                                    >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label
                                    for="zip_code"
                                    class="col-md-4 col-form-label text-md-right"
                                >
                                    Zip code
                                </label>
                                <div class="col-md-6">
                                    <input
                                        type="text"
                                        id="zip_code"
                                        class="form-control"
                                        required
                                    >
                                </div>
                            </div>
                            <div class="form-group row">                                
                                <label
                                    for="date_hired"
                                    class="col-md-4 col-form-label text-md-right"
                                >
                                    Hired at
                                </label>
                                <div class="col-md-6">
                                    <datepicker input-class="form-control"></datepicker>
                                </div>
                            </div>
                            <div class="form-group row">                                
                                <label
                                    for="birthday"
                                    class="col-md-4 col-form-label text-md-right"
                                >
                                    Birthday
                                </label>
                                <div class="col-md-6">
                                    <datepicker input-class="form-control"></datepicker>
                                </div>
                            </div>
                            <div class="form-group row mb-0 mt-4">                                
                                <div class="col-md-6 offset-md-4">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        Store
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    import Datepicker from 'vuejs-datepicker';
    export default {
        components:{
            Datepicker
        },
        data(){
            return{
                countries:[]
            }
        },
        mounted() {
            this.getCountries();
            console.log('Employee Create Component mounted.');
        },
        created(){
        },
        methods:{
            getCountries(){
                console.log("aa");
                axios.get('/api/employees/countires')
                    .then(res=>{
                        this.countries=res.data
                    }).catch(error=>{
                        console.log(error);
                    });
            }
        }
    }
</script>