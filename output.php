<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css"
>

<title>PHP Test Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://cdn.jsdelivr.net/npm/@vizuaalog/bulmajs@0.12.2/dist/bulma.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>

function gotop(url)
{
  window.location = url;
}


function goblank(q)
{
  var win = window.open(q, '_blank');
  win.focus();
  }

function AutoBu()
{
     $(".autobutton").click(
        function(event)
            {
            var e = $(this).attr("exist");
            if (e == "exist")
                {
                event.preventDefault();
                return;
                }
            var nv = $(this).html();
            var nv2 = '<span class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></span> ' + nv;
            $(this).html(nv2);

            var url = $(this).attr("href");
            var rep = 0;
            if (url == "" || url === undefined)
               {
rep = 1;
 url = $(this).attr("hrefr");
}
            if (url == "" || url === undefined)
                {
                // Form?
                var form = $(this).parents('form:first');
                if(form !== undefined)
                    {
                    $(this).attr("exist","exist");
//                    $('input.btn-primary').prop("disabled", "disabled");
                    //$(this).prop('disabled',true);
                    // block();
                    elblock($(this));
                    form.submit();
                    }

                return;
                }

            $(this).attr("exist","exist");
            $(this).prop('disabled',true);
            var trg = $(this).attr("trg");

            if (trg == "self")
                g(url);
             else
                {
if (rep == 1)


window.location.replace(url);
else
                gotop(url);
            }
            }
        );
}

function toggle(j)
{
  $(j).toggle();
}

function summer()
{
  $('.summernote').summernote({
    height: 120,
  });
}



$(document).ready(function()
{
  AutoBu();
  summer();
});

</script>