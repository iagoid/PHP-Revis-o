<?php
// Conexão
include_once 'php_action/db_connect.php';

//Sessão
session_start();
if(isset($_SESSION['mensagem'])): ?>

<script>
window.onload = function() {
    M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'})
}
</script>

<?php
endif;
session_unset();
?>