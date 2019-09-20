$(document).ready(function() {

    let edit = false;
    console.log('jquery is working!');
   $('#task-result').hide();
   obtenerUsuarios();

    $('#search').keyup(function() {
        if($('#search').val()){
        let search = $('#search').val();
        $.ajax({
           url: 'usuarios-search.php',
           
           type: 'POST',
           data:{search},
           
           success: function(response){
             if(!response.error) {
                 let tasks = JSON.parse(response);
                 let template = '';
     
                 tasks.forEach(task => {
                     template += `<li> 
                     ${task.nombre}
                     </li>`
     
                 });
                  $('#container').html(template);
                  $('#task-result').show();
           }
           }
        });
    }
  

});

    $('#task-form').submit(function(e){
        const envioDatos = {
            usuario: $('#usuario').val(),
            password: $('#password').val(),
            id: $('#usuario-id').val(),
            perfil: $('#perfil').val()
            
                   
        };

      let url = edit === false ? 'usuarios-add.php' : 'usuarios-edit.php';
      console.log(url);

        $.post(url, envioDatos, function(response){
            console.log(response);
            obtenerUsuarios();
            $('#task-form').trigger('reset');

        });
        e.preventDefault();
    });

    function obtenerUsuarios() {
        $.ajax({
            url: 'usuarios-list.php',
            type: 'GET',
            success: function(response) {
               let usuarios = JSON.parse(response);
               let template = '';
               usuarios.forEach(usuario =>{
                   template += `
                   <tr usuarioId="${usuario.id}">
                   <td>
                            <button class="usuario-delete btn btn-borrar">
                            Borrar
                            </button>
                        </td>
                        <td>${usuario.id}</td>
                        <td>
                            <a href="#" class="usuario-item">${usuario.usuario}</a>
                        </td>
                        <td>${usuario.password}</td>
                        <td>${usuario.perfil}</td>
                               
                   </tr>
                   `
               });
               $('#tasks').html(template);
            }
        });
    }

    $(document).on('click', '.usuario-delete', function(){
     if(confirm('Estar seguro de querer elimarlo?')){
        let element =  $(this)[0].parentElement.parentElement;
        let id = $(element).attr('usuarioId');
        $.post('usuarios-delete.php', {id}, function(response){
          obtenerUsuarios();
        });
     }
      
    });

    $(document).on('click', '.usuario-item', function(){
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('usuarioId');
        $.post('usuarios-single.php', {id}, function(response){
            const task = JSON.parse(response);
            $('#usuario').val(task.usuario);
            $('#password').val(task.password);
            $('#usuario-id').val(task.id);
            $('#perfil').val(task.perfil);
            edit = true;

        });
        
    });

});