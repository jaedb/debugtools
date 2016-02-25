<div id="page-info">
    
    <div class="debug-item">
        Debug tools
    </div>
    
    <div class="debug-item mode">
        <strong>Mode:</strong>
        <span>$Mode</span>
    </div>
    
    <div class="debug-item">
        <strong>Load time:</strong>
        <span>{$TimeToLoad}s</span>
    </div>
    
    <% if CanEmulateUser %>
        <a class="debug-item emulateuser" href="/home/emulateuser"><strong>Emulate user</strong></a>
    <% end_if %>
    
</div>