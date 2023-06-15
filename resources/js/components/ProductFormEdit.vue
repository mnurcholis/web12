<template>
    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit Product</h6>
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
                    <form @submit.prevent="submitForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input class="form-control" type="text" id="name" v-model="product.name" required />
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control" id="description" v-model="product.description"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input class="form-control" type="number" id="price" v-model="product.price" required />
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">File:</label>
                            <input class="form-control" type="file" id="file" @change="handleFileChange"
                                accept="image/png, image/jpeg, image/jpg" />
                        </div>
                        <button type="submit" class="btn btn-primary">Update Product</button>
                        <router-link to="/" class="btn btn-info ml-1"
                            style="text-decoration: none; color: white;">Cancel</router-link>
                    </form>
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
            product: {
                file: '',
                name: '',
                description: '',
                price: 0
            }
        }
    },
    async created() {
        const response = await axios.get(`/api/products/${this.$route.params.id}`);
        this.product = response.data;
    },
    methods: {
        handleFileChange(e) {
            this.product.file = e.target.files[0];
        },
        async submitForm() {
            try {
                const formData = new FormData();
                formData.append('file', this.product.file);
                formData.append('name', this.product.name);
                formData.append('description', this.product.description);
                formData.append('price', this.product.price);
                formData.append("_method", "PATCH");

                await axios.post(`/api/products/${this.$route.params.id}`, formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                });

                this.$router.push('/');
            } catch (error) {
                // console.error(error);

                const errorMessage = document.getElementById('error-message');
                const errorText = document.getElementById('error-text');
                errorText.textContent = error.message;
                errorMessage.style.display = 'block';
            }
        }
    }
}
</script>