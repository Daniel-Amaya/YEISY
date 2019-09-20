$(document).ready(function() {

    let edit = false;
    console.log('jquery is working!');
   $('#task-result').hide();
   obtenerMedidas();

    $('#search').keyup(function() {
        if($('#search').val()){
        let search = $('#search').val();
        $.ajax({
           url: 'medidas-search.php',
           
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
            nombre: $('#nombre').val(),
            apellidos: $('#apellidos').val(),
            id: $('#medida-id').val(),
            celular: $('#celular').val(),
            escote: $('#escote').val(),
            escote_total: $('#escote_total').val(),
            talle_delante: $('#talle_delante').val(),
            talle_atras: $('#talle_atras').val(),
            altura_busto: $('#altura_busto').val(),
            separacion_busto: $('#separacion_busto').val(),
            contorno_busto: $('#contorno_busto').val(),
            hombro_delante: $('#hombro_delante').val(),
            hombro_atras: $('#hombro_atras').val(),
            contorno_hombro: $('#contorno_hombro').val(),
            costado: $('#costado').val(),
            cintura: $('#cintura').val(),
            cintura_alta: $('#cintura_alta').val(),
            cintura_baja: $('#cintura_baja').val(),
            cadera: $('#cadera').val(),
            descaderado: $('#descaderado').val(),
            altura_cadera: $('#altura_cadera').val(),
            largo_falda: $('#largo_falda').val(),
            largo_manga: $('#largo_manga').val(),
            contorno_brazo: $('#contorno_brazo').val(),
            corte_imperio: $('#corte_imperio').val()
                   
        };

      let url = edit === false ? 'medidas-add.php' : 'medidas-edit.php';
      console.log(url);

        $.post(url, envioDatos, function(response){
            console.log(response);
            obtenerMedidas();
            $('#task-form').trigger('reset');

        });
        e.preventDefault();
    });

    function obtenerMedidas() {
        $.ajax({
            url: 'medidas-list.php',
            type: 'GET',
            success: function(response) {
               let medidas = JSON.parse(response);
               let template = '';
               medidas.forEach(medida =>{
                   template += `
                   <tr medidaId="${medida.id}">
                   <td>
                            <button class="medida-delete btn btn-borrar">
                            Borrar
                            </button>
                        </td>
                        <td>${medida.id}</td>
                        <td>
                            <a href="#" class="medida-item">${medida.nombre}</a>
                        </td>
                        <td>${medida.apellidos}</td>
                        <td>${medida.celular}</td>
                        <td>${medida.escote}</td>
                        <td>${medida.escote_total}</td>
                        <td>${medida.talle_delante}</td>
                        <td>${medida.talle_atras}</td>
                        <td>${medida.altura_busto}</td>
                        <td>${medida.separacion_busto}</td>
                        <td>${medida.contorno_busto}</td>
                        <td>${medida.hombro_delante}</td>
                        <td>${medida.hombro_atras}</td>
                        <td>${medida.contorno_hombro}</td>
                        <td>${medida.costado}</td>
                        <td>${medida.cintura}</td>
                        <td>${medida.cintura_alta}</td>
                        <td>${medida.cintura_baja}</td>
                        <td>${medida.cadera}</td>
                        <td>${medida.descaderado}</td>
                        <td>${medida.altura_cadera}</td>
                        <td>${medida.largo_falda}</td>
                        <td>${medida.largo_manga}</td>
                        <td>${medida.contorno_brazo}</td>
                        <td>${medida.corte_imperio}</td>                      
                   </tr>
                   `
               });
               $('#tasks').html(template);
            }
        });
    }

    $(document).on('click', '.medida-delete', function(){
     if(confirm('Estar seguro de querer elimarlo?')){
        let element =  $(this)[0].parentElement.parentElement;
        let id = $(element).attr('medidaId');
        $.post('medidas-delete.php', {id}, function(response){
          obtenerMedidas();
        });
     }
      
    });

    $(document).on('click', '.medida-item', function(){
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('medidaId');
        $.post('medidas-single.php', {id}, function(response){
            const task = JSON.parse(response);
            $('#nombre').val(task.nombre);
            $('#apellidos').val(task.apellidos);
            $('#medida-id').val(task.id);
            $('#celular').val(task.celular);
            $('#escote').val(task.escote);
            $('#escote_total').val(task.escote_total);
            $('#talle_delante').val(task.talle_delante);
            $('#talle_atras').val(task.talle_atras);
            $('#altura_busto').val(task.altura_busto);
            $('#separacion_busto').val(task.separacion_busto);
            $('#contorno_busto').val(task.contorno_busto);
            $('#hombro_delante').val(task.hombro_delante);
            $('#hombro_atras').val(task.hombro_atras);
            $('#contorno_hombro').val(task.contorno_hombro);
            $('#costado').val(task.costado);
            $('#cintura').val(task.cintura);
            $('#cintura_alta').val(task.cintura_alta);
            $('#cintura_baja').val(task.cintura_baja);
            $('#cadera').val(task.cadera);
            $('#descaderado').val(task.descaderado);
            $('#altura_cadera').val(task.altura_cadera);
            $('#largo_falda').val(task.largo_falda);
            $('#largo_manga').val(task.largo_manga);
            $('#contorno_brazo').val(task.contorno_brazo);
            $('#corte_imperio').val(task.corte_imperio);
            edit = true;

        });
        
    });

});