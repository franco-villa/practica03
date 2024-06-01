


    <thead class="table table-bordered">
      <tr>
        <!-- <th scope="col" class="{{ setActivo('home') }}"><a href="/">Home</a></th>  -->
        
          <th scope="col" class="{{ request()->routeIs('home') ? 'activo' : '' }}"><a href="/">Home</a></th> 
        <th scope="col" class="{{ request()->routeIs('nosotros') ? 'activo' : ''}}"><a href="nosotros">Nosotros</a></th> 
        <th scope="col" class="{{ request()->routeIs('servicios') ? 'activo' : ''}}"><a href="servicios">Servicios</a></th> 
        <th scope="col" class="{{ request()->routeIs('contacto') ? 'activo' : ''}}"><a href="contacto">Contacto</a></th> 
      </tr>
    </thead>






