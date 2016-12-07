<?php render('_header',array('title'=>$title))?>

<div class="container">
	<h4>Showing all Contacts on database.</h4>
	
	<table class = "table-striped table-boardered table-condensed" border="1" style="width:100%;">
	  <thead>
	    <tr>
	      <th>Id</th> 
	      <th>Name</th>
	      <th>Email</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php foreach ($contacts as $contact):?>
	     <tr>
	       <td><?= $contact['id'] ?></td>
	       <td><?= $contact['name']  ?></td>
	       <td><?= $contact['email'] ?></td>
	    </tr>
	    <?php endforeach; ?>
	  </tbody>
	  
	</table>


</div>
<?php render('_footer')?>