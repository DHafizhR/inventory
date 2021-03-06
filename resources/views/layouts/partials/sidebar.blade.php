<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="/" class="title">Inventory</a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                {{-- <li class="sidebar-item">
                    <a href="{{ route('product.index') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Product</span>
                    </a>
                </li> --}}

                <li class="sidebar-item">
                    <a href="{{ route('product.index') }}" class="sidebar-link">
                        <span>Product</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('category.index') }}" class="sidebar-link">
                        <span>Category</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('warehouse.index') }}" class="sidebar-link">
                        <span>Warehouse</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('inventory.index') }}" class="sidebar-link">
                        <span>Inventory</span>
                    </a>
                </li>


            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
