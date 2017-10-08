<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script>
$(document).ready(function() { // ��� �a��� �o��e �a������ ���a����
	$("#ajaxform").submit(function(){ // �e�e��a���ae� ��e ��� �o����� o���a���
		var form = $(this); // �a���e� �o���, ��o�� �o�o� �e ���o ��o��e� � this
		var error = false; // ��e��a���e���o o���o� �e�
		form.find('input, textarea').each( function(){ // ��o�e��� �o �a��o�� �o�� � �o��e
			if ($(this).val() == '') { // e��� �a�o��� ����oe
				alert('�a�o����e �o�e "'+$(this).attr('placeholder')+'"!'); // �o�o��� �a�o����!
				error = true; // o����a
			}
		});
		if (!error) { // e��� o����� �e�
			var data = form.serialize(); // �o��o�a����ae� �a���e
			$.ajax({ // �����a������e� ajax �a��o�
			   type: 'POST', // o���a���e� � POST �o��a�e, �o��o GET
			   url: 'gogogo.php', // ���� �o o��a�o����a, � �a� o� �e��� � �o� �e �a��e
			   dataType: 'json', // o��e� ��e� � json �o��a�e
			   data: data, // �a���e ��� o���a���
		       beforeSend: function(data) { // �o����e �o o���a���
		            form.find('input[type="submit"]').attr('disabled', 'disabled'); // �a����e�, o������� ��o���, ��o�� �e �a�� �o 100 �a�
		          },
		       success: function(data){ // �o����e �o��e ��a��o�o o��a�e��� � �e��e�� � �o���e��� o��e�a
		       		if (data['error']) { // e��� o��a�o���� �e���� o�����
		       			alert(data['error']); // �o�a�e� e� �e���
		       		} else { // e��� ��e ��o��o o�
		       			alert('�����o o���a��e�o! �e�a��e �o���! =)'); // ���e� ��o ��e o�
		       		}
		         },
		       error: function (xhr, ajaxOptions, thrownError) { // � ����ae �e��a��o�o �a�e��e��� �a��o�a � �e��e��
                            
		            alert(xhr.status); // �o�a�e� o��e� �e��e�a
		           
		         },
		       complete: function(data) { // �o����e �o��e ���o�o ���o�a
		            form.find('input[type="submit"]').prop('disabled', false); // � ���o� ����ae ������� ��o��� o��a��o
		         }
		                  
			     });
		}
		return false; // �����ae� ��a��a����� o���a��� �o���
	});
});
</script>