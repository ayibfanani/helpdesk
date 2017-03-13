<template>
    <div>
        <div class="column">
            <br>
            {{ ticket.content }}
            <hr>

            <article class="media">
                <div class="media-left">
                    <figure class="image is-32x32">
                        <img src="http://bulma.io/images/placeholders/128x128.png" alt="Image" class="circle">
                    </figure>
                </div>
                <div class="media-content">
                    <div class="content is-pulled-left">
                        <p>
                            <strong>John Smith</strong> <small>email@johnsmith.com</small> <small>31m</small>
                        </p>
                    </div>
                    <nav class="level is-pulled-right">
                        <div class="level-left">
                            <a class="level-item"><small>Reply</small></a>
                            <a class="level-item"><small>Comment</small></a>
                        </div>
                    </nav>
                </div>
            </article>
            <br>
        </div>
        <hr class="is-marginless">

        <nav class="level is-marginless background-white-bis" id="nav-content">
            <div class="level-left">
                <div class="column">12 Comments</div>
            </div>
            <div class="level-right">
                <div class="level-item">
                    <div class="tabs">
                        <ul>
                            <li class="is-active"><a>All (10)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <table class="table">
            <tbody>
                <tr v-for="comment in ticket.comments">
                    <td>
                        <br>
                        {{ comment.content }}
                        <hr>

                        <article class="media">
                            <div class="media-left">
                                <figure class="image is-32x32">
                                    <img src="http://bulma.io/images/placeholders/128x128.png" alt="Image" class="circle">
                                </figure>
                            </div>
                            <div class="media-content">
                                <div class="content is-pulled-left">
                                    <p>
                                        <strong>{{ comment.name }}</strong> <small>email@johnsmith.com</small> <small>31m</small>
                                    </p>
                                </div>
                                <nav class="level is-pulled-right">
                                    <div class="level-left">
                                        <a class="level-item"><small>Reply</small></a>
                                        <a class="level-item"><small>Comment</small></a>
                                    </div>
                                </nav>
                            </div>
                        </article>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        computed: {
            ticket() {
                return {
                    id: 1,
                    user_id: 1,
                    code: '102938',
                    subject: 'How fix this issue ?',
                    content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam at eveniet quo molestiae magnam sequi eius, consectetur architecto, ut repellat aliquam distinctio aperiam modi, similique deserunt consequatur rem blanditiis. Maxime!',
                    status: 0,
                    priority: 'high',
                    type: 0,
                    comments: [
                        {
                            name: 'Test',
                            content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nostrum nesciunt beatae veritatis repellat tempore ipsa doloribus possimus non facere, sapiente sint hic laboriosam quisquam, voluptate, magni id minus optio.',
                        }
                    ]
                }
            }
        }
    }
</script>