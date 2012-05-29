	 <hr>
     
     	  <footer>
     		<p>T4E Summit Launchpad by <a href="http://twitter.com/nickgrossman">Nick Grossman</a>, based on the <a href="https://github.com/natematias/roflcon-livenote-index">ROFLCon Livenote Index</a> by <a href="http://twitter.com/natematias">J. Nathan Matias</a> and <a href="http://twitter.com/cdetar">Charlie DeTar</a>, all from the MIT Media Lab <a href="http://civic.mit.edu">Center for Civic Media</a>. <a href="https://github.com/nickgrossman/t4e-summit-launchpad">Fork it on Github</a></p>
     	  </footer>
     
     	</div><!--/.fluid-container-->
     
     	<!-- Le javascript
     	================================================== -->
     	<script language="javascript" type="text/Javascript" src="bootstrap/js/jquery-1.7.2.min.js"></script>
     	<script language="javascript" type="text/Javascript" src="bootstrap/js/underscore.js"></script>
     	<script language="javascript" type="text/Javascript" src="bootstrap/js/backbone.js"></script>
     
     	<script type='text/template' id='mainListingTemplate'>
     	  <div class="well">
     		<h1><%=title%>
     		<small><%=subtitle%></small>
     		</h1>
     	  </div>
     
     	  <div class="stickies <%=stickiesClass%>">
     	  <iframe src="<%=stickiesUrl%>"></iframe>
     	  </div>
     
     	  <div class="etherpad">
     	  <iframe src="<%=etherpadUrl%>"></iframe>
     	  </div>
     
     	 </script>
     
     	 <script type='text/template' id='menuItemTemplate'>
     		 <li><a href="#<%=index%>"><%=title%></a></li>
     	</script>
     
     	<script type='text/template' id='defaultListingTemplate'>
     	  <div class="well">
	     	   <h1>This is our group notepad for session notes.</h1>
	     	   <p>As the agenda gets set, we'll populate all the sessions here.</p>
     		   <p><i class="icon-arrow-left"></i> click a session to see the notes</p>
     	  </div>
     	</script>
     	<script language="javascript" type="text/Javascript" src="app/views.js"></script>
     	<script language="javascript" type="text/Javascript" src="app/actions.js"></script>
     
     	<!-- Placed at the end of the document so the pages load faster -->
       </body>
     </html>