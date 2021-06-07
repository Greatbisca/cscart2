<div class="bananas">
    <ul>
    {foreach $item as $value}
        <li><a ref="admin.php?dispatch=loyalty.update&id_loyalty_system={$value.user_id}">{value.firstname} {$value.lastname} --> {$value.pontos}</a></li>
    </ul>
</div>