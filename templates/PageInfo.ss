<div id="page-info">
    
    <% if CanEmulateUser %>
        <a class="debug-item" href="/home/emulateuser"><strong>Emulate user</strong></a>
    <% end_if %>
    
    <span class="debug-item mode">
        <strong>Mode:</strong>
        <span>$Mode</span>
    </span>
    
    <span class="debug-item">
        <strong>Load time:</strong>
        <span>{$TimeToLoad}s</span>
    </span>
    
</div>