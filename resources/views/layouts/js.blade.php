<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<script>
    $("#image-search").on("click", function(event) {
        event.preventDefault()
        var text = $("#image-search-input").val()
        if (text) {
            fetch("https://www.reddit.com/search.json?q="+text)
            .then(response => response.json())
            .then(response => {
                var output = ""
                const data = response.data.children.map(data => data.data)
                data.forEach(post => {
                    if (post.preview) {
                        output += `<div class="col-3"><img src="${post.preview.images[0].source.url}" style="max-width: 100%" /></div>`
                    }
                })
                $("#image-preview").html(output)
            })
            .catch(error => {
                console.log(error)
            })
        }
    })
</script>