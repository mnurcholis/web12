<template>
    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Add Product</h6>
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
                    <div id="error-message" style="display: none;">
                        <p>Error: <span id="error-text"></span></p>
                    </div>
                    <form @submit.prevent="submitForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input class="form-control" type="text" id="name" name="name" v-model="product.name" autocomplete="off" required />
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control" id="description" name="description" v-model="product.description" autocomplete="off"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input class="form-control" type="number" id="price" name="price" v-model="product.price" autocomplete="off" required />
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">File:</label>
                            <input class="form-control" type="file" id="file" name="file" @change="handleFileChange"
                                accept="image/png, image/jpeg, image/jpg" required />
                        </div>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                        <router-link to="/" class="btn btn-info ml-1"
                            style="text-decoration: none; color: white;">Cancel</router-link>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
  
<script>
import Swal from 'sweetalert2';
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

                await axios.post('/api/products', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                });

                this.$router.push('/');
                this.showInformationMessage('Product added successfully.');
            } catch (error) {
                // console.error(error);
                // Display error message
                const errorMessage = document.getElementById('error-message');
                const errorText = document.getElementById('error-text');
                errorText.textContent = error.message;
                errorMessage.style.display = 'block';
            }
        }
    },
    showInformationMessage(message) {
        Swal.fire({
            title: 'Information',
            text: message,
            icon: 'info',
            confirmButtonText: 'OK'
        });
    }
}
</script>