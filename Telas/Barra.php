<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<div class="input-group" style="justify-content: flex-end; position: static;">
  <input type="text" id="searchInput" class="barra-de-pesquisa" style="border-radius: 2px;" placeholder="Buscar">
</div>


 <script>
  
$(document).ready(function() {
  $("#searchButton").on("click", function() {
    search();
  });

  $("#searchInput").on("input", function() {
    search();
  });

  $("#searchInput").on("keydown", function(event) {
    if (event.key === "Enter") {
      search();
    }
  });

  function search() {
    var searchTerm = $("#searchInput").val();

    $("table tbody tr").each(function() {
      var rowId = $(this).find("td:first").text();

      if (rowId.toLowerCase().includes(searchTerm.toLowerCase())) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  }
});
</script>