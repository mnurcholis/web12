<template>
    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Product</h6>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-xl-12">
                    <h5 id="associating-form-text-with-form-controls">Name:</h5>
                    <h6>{{ product.name }}</h6>
                    <h5 id="associating-form-text-with-form-controls">File :</h5>
                    <img :src="product.file" width="400" />
                    <h5 id="associating-form-text-with-form-controls">Description:</h5>
                    <p>{{ product.description }}</p>
                    <h5 id="associating-form-text-with-form-controls">Price:</h5>
                    <p>Price: {{ product.price }}</p>
                    <router-link :to="`/products/${product.id}/edit`" class="btn btn-primary">Edit</router-link>
                    <router-link to="/" class="btn btn-info ml-1"
                        style="text-decoration: none; color: white;">Kembali</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            product: {}
        }
    },
    async created() {
        try {
            const response = await axios.get(`/api/products/${this.$route.params.id}`);
            this.product = response.data;
        } catch (error) {
            console.error(error);
        }
    }
}
</script>