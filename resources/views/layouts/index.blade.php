<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Science Forum</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/3.2.89/css/materialdesignicons.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" href="/static/css/style.css">
    <script type="text/javascript">

    	// function submitf(){
    	// 	let question = document.querySelector("#quest").value;
    	// 	if (!question){
    	// 		Swal.fire("Please Write a question")
    	// 	}
    	// 	else{
    	// 		let form = document.getElementById("formq")
    	// 		form.submit();
    	// 	}
    	// }
    </script>

  </head>
  <body>

    <section >
        <div class="hero-body">
            <div class="container hero-forum has-text-centered">
                <h1 class="title">
                  Chat
                </h1>
                <br>
                <h2 class="subtitle">
            <form method="POST" action="" id="formq">

                <div class="field is-grouped">
                    <p class="control is-expanded">
                        <input class="input is-medium" type="text" id="quest" placeholder="Ask a question...." name="question">
                    </p>
                    <p class="control">
                        <button class="button is-medium is-info" type="submit">
                      Post
                    </button>

                    </p>
                </div>
           </form>

            </div>

        </div>
    </section>

    <br/>

    <div class="container">
        <div class="columns">
            <div class="column is-three-quarters">
                <div class="box forum">
                    <article class="media">
                        <div class="media-content">
                        	<p></p>
                            <div class="content list-forum">
                                <p class="text-content">
                                    <a href="">
                                </span>
                              </a>
                                </p>
                            </div>
                        </div>
                    </article>
                </div>

</div>
<div>

</h2>

    <script src="/static/js/script.js"></script>
</body>
</html>
