<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 mt-4">
                {{ form }}
                <form>
                    <div class="form-group pb-2">
                        <label>Email:</label>
                        <input v-model="email" type="email" class="form-control" id="email" />
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input v-model="password" type="password" class="form-control" id="password" />
                    </div>
                    <button class="btn btn-primary mt-2" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import { reactive } from 'vue';
export default({
    setup(){
        let form = reactive({
            email: '',
            password: ''
        });
        return { form }
    }
})
</script>
