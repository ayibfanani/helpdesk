<template>
    <div>
        <div class="columns is-marginless">
            <div class="column is-3">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">FAQ</h1>
                        <ul>
                            <li>
                                <a href="/knowledges/posts/13">Lorem ipsum dolor sit amet</a>
                            </li>
                            <li>
                                <a href="">consectetur adipisicing elit.</a>
                            </li>
                            <li>
                                <a href="">adipisci atque pariatur illum vel</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="column is-3">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">General</h1>
                        <ul>
                            <li>
                                <a href="">Lorem ipsum dolor sit amet</a>
                            </li>
                            <li>
                                <a href="">consectetur adipisicing elit.</a>
                            </li>
                            <li>
                                <a href="">adipisci atque pariatur illum vel</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Add Departement -->
        <modal action="https://www.google.com/" method="POST">
            <span slot="title">Create new Department</span>

            <span slot="content">
                <label class="label">Name</label>
                <p class="control">
                    <input type="text" name="name" placeholder="Name" class="input">
                </p>
                
                <label class="label">Slug</label>
                <p class="control">
                    <input type="text" name="slug" placeholder="Slug" class="input">
                </p>
            </span>

            <span slot="footer">
                <button type="submit" class="button is-primary">Save changes</button>
                <a class="button">Cancel</a>
            </span>
        </modal>
        <!-- End Quick Edit -->
    </div>
</template>

<script>
    export default {}
</script>