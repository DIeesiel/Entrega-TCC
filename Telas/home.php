<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <?php  include ('./menu.php'); ?>

<main>
	<div class="container1">
			<h1 class="titulo">Marque seus compromissos!</h1>
            <div id="container">
                <div id="header1">
                  <div id="monthDisplay"></div>
          
                  <div>
                    <button id="backButton">Anterior</button>
                    <button id="nextButton">Próximo</button>
                  </div>
                    
                </div>
          
                <div id="weekdays">
                  <div>Domingo</div>
                  <div>Segunda-feira</div>
                  <div>Terça-feira</div>
                  <div>Quarta-feira</div>
                  <div>Quinta-feira</div>
                  <div>Sexta-feira</div>
                  <div>Sábado</div>
                </div>
          
          
                <!-- div dinamic -->
                <div id="calendar" ></div>
          
             
            </div>
          
            <div id="newEventModal">
              <h2>Novo evento</h2>
          
              <input id="eventTitleInput" placeholder=""/>
          
              <button id="saveButton"> Salvar</button>
              <button id="cancelButton">Cancelar</button>
            </div>
          
            <div id="deleteEventModal">
              <h2 style="font-family: 'Arial';">Evento</h2>
          
              <div id="eventText"></div><br>
          
          
              <button id="deleteButton">Deletar</button>
              <button id="closeButton">Cancelar</button>
            </div>
          
            <div id="modalBackDrop"></div>
          
          
            <script src="TelaCalen.js"></script>
		</div>
</main>