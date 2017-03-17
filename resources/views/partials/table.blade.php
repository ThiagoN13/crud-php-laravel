@include('index')
<h1 class="text-primary">Controle de usuario</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nome</th>
        <th class="text-center">Email</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Editar</th>
    </tr>
  </thead>
  <tbody>


        <tr>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        <td class="text-center"></td>


            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a  class="btn btn-info btn-xs">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </td>


        </tr>




  </tbody>
  <tfoot>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nome</th>
        <th class="text-center">Email</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Editar</th>
    </tr>
  </tfoot>
</table>
