$(document).ready(function(){
    $(document).on('change','#file',function(){
         var property = document.getElementById('photo').files[0];
         var image_name = property.name;
         var image_extension = image_name.split('.').pop().toLowerCase();
         if(JQuery.inArray(image_extension,['gif','png','jpg','jpeg']) == -1){
             alert('Arquivo de imagem inválido!!!');
         }
         var image_size = property.size;
         if(image_size > 2000000) {
             alert('Arquivo de imagem é muito grande!!!');
         } else {
             var form_data = new FormData();
             form_data.append('file',property);
             $.ajax({
                 url:'myinfo.image',
                 method:'POST',
                 data:form_data,
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(){
                     $('#uploaded_image').html("<label class='text-success'>Carregando imagem....</label>");
                 },
                 success:function(data){
                     $('#uploaded_image').html(data);

                 }
             });
         }

    });
});
