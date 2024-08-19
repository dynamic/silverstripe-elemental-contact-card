<div class="card h-100">
    <div class="row g-0">
        <% if $Image %>
            <% if $Position == 'Top' %>
                <img src="$Image.FocusFill(800,530).URL" class="card-img-top" alt="$Image.Title.ATT">
            <% else %>
                <div class="col-lg-7">
                    <img src="$Image.FocusFill(800,530).URL" class="img-fluid" alt="$Image.Title.ATT">
                </div>
            <% end_if %>
        <% end_if %>
        <div class="<% if $Position != 'Top' %> col-lg-5<% end_if %><% if $Position == 'Right' %> order-md-first<% end_if %>">
            <div class="card-body h-100 d-flex align-items-center">
                <div>
                    <% if $Title && $ShowTitle %><$TitleTag class="element__title $TitleSizeClass">$Title</$TitleTag><% end_if %>
                    <% if $PositionTitle %><h5 class="card-title">$PositionTitle</h5><% end_if %>
                    <% if $Content %><div class="card-text">$Content</div><% end_if %>
                    <% if $Phone %><p><a href="tel:$Phone" class="btn btn-primary">$Phone</a></p><% end_if %>
                    <% if $Email %><p><a href="mailto:$Email" class="btn btn-primary">$Email</a></p><% end_if %>
                    <% if $ElementLink %><p><a href="$ElementLink.URL" class="btn btn-primary" title="$ElementLink.Title"<% if $ElementLink.OpenInNew %> target="_blank" rel="noopener noreferrer"<% end_if %>>$ElementLink.Title</a></p><% end_if %>
                </div>
            </div>
        </div>
    </div>
</div>