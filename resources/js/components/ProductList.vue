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
                    <router-link to="/products/create" class="btn btn-primary"
                        style="text-decoration: none; color: white;">Add
                        Product</router-link>
                    <hr>
                    <table class="table table-bordered" id="example" name="example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>File</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-if="products.length == 0">
                                <td colspan="5" class="text-center">
                                    Data Belum Tersedia!
                                </td>
                            </tr>
                            <tr v-for="product in products" :key="product.id">
                                <td>{{ product.id }}</td>
                                <td class="text-center">
                                    <img :src="product.file" width="40" class="rounded-3" />
                                </td>
                                <td>{{ product.name }}</td>
                                <td>{{ product.description }}</td>
                                <td>{{ product.price }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="list-icons-item dropdown">
                                            <a href="#" class="list-icons-item dropdown-toggle caret-0"
                                                data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <router-link :to="`/products/${product.id}`" class="dropdown-item"><i
                                                        class="icon-file-eye"></i> View</router-link>
                                                <router-link :to="`/products/${product.id}/edit`" class="dropdown-item"><i
                                                        class="icon-pencil5"></i> Edit</router-link>
                                                <button @click="deleteProduct(product.id)" type="button"
                                                    class="dropdown-item"><i class="icon-trash"></i> Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
            products: []
        }
    },
    async created() {
        const response = await axios.get('/api/products');
        this.products = response.data;
        this.$nextTick(() => {
            $('#example').DataTable({
                pagingType: "simple",
                language: {
                    paginate: { 'next': $('html').attr('dir') == 'rtl' ? 'Next &larr;' : 'Next &rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr; Prev' : '&larr; Prev' }
                }
            });
        });
    },
    methods: {
        async deleteProduct(id) {
            try {
                const result = await Swal.fire({
                    title: 'Confirmation',
                    text: 'Are you sure you want to delete this product?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Delete',
                    cancelButtonText: 'Cancel'
                });

                if (result.isConfirmed) {
                    await axios.delete(`/api/products/${id}`);
                    this.products = this.products.filter(product => product.id !== id);
                    Swal.fire('Deleted!', 'The product has been deleted.', 'success');
                }
            } catch (error) {
                console.error(error);
                Swal.fire('Error', 'An error occurred while deleting the product.', 'error');
            }
        }
    }
}
</script>