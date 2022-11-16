</div>

<?php if (isset($_SESSION['error'])):?>
    <div><?=$this->session->flashdata('error')?></div>
<?php endif; ?>
</body>
</html>