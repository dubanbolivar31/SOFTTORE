<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestor de Gastos</title>
  <link rel="stylesheet" href="../ASSETS/CSS/administradorr.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div class="dashboard-container">
    <div class="sidebar">
      <div class="user-profile">
        <div class="circulo"><img src="../ASSETS/IMG/db.png"></div>
        <h2>Duban Bolívar</h2>
        <p>Administrador</p>
      </div>
      <ul class="menu">
        <li class="active"><a href="">Gastos</a></li>
        <br><h4>Tablas</h4>
        <li><a href="../VIEW/menu_rol.php">Tabla Rol</a></li>
        <li><a href="../VIEW/menu_usuario.php">Tabla Usuario</a></li>
        <li><a href="../VIEW/menu_admin.php">Tabla Administrador</a></li>
        <li><a href="../VIEW/menu_cliente.php">Tabla Cliente</a></li>
        <li><a href="../VIEW/menu_proveedor.php">Tabla Proveedor</a></li>
        <li><a href="../VIEW/menu_productos.php">Tabla Productos</a></li>
        <li><a href="../VIEW/menu_ventas.php">Tabla Ventas</a></li>
        
      </ul>
    </div>
    <div class="main-content">
      <h1>Gestor de Gastos e Ingresos</h1>

      <div class="top-section">
        <div class="card balance-card">
          <h3>Ingresos vs Gastos Totales</h3>
          <canvas id="pieChart"></canvas>
          <p><span class="income">Ingresos: $191.000.000</span><br><span class="expenses" id="totalGastos">Gastos: $154.000.000</span></p>
        </div>

        <div class="card chart-card">
          <h3>Ingresos vs Gastos (Anual)</h3>
          <canvas id="barChart"></canvas>
        </div>

        <div class="card payment-card">
          <h3>Pago Pendiente</h3>
          <br><br>
          <p class="amount"></p>
          <br><br>
          <p>Próximo pago: 30/11/2024</p>
          <br><br>
          <button class="pay-now-btn">PAGAR AHORA</button>
        </div>
      </div>

      <div class="bills-section">
        <div class="card bill-card">
          <div class="bill-icon">💧</div>
          <h3>Agua</h3>
          <p class="bill-amount">$200.000</p>
          <p class="percentage">+2.5% del mes pasado</p>
        </div>

        <div class="card bill-card">
          <div class="bill-icon">⚡</div>
          <h3>Energía</h3>
          <p class="bill-amount">$600.000</p>
          <p class="percentage">+5.1% del mes pasado</p>
        </div>

        <div class="card bill-card">
          <div class="bill-icon">🔥</div>
          <h3>Gas</h3>
          <p class="bill-amount">$80.000</p>
          <p class="percentage">-0.8% del mes pasado</p>
        </div>
      </div>
    </div>
  </div>

  <div id="modalPago" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <br><br>
      <h2>Confirmar Pago</h2>
      <br><br>
      <p></p>
      <br><br>
      <button id="confirmarPago" class="pay-now-btn">Confirmar Pago</button>
    </div>
  </div>

  <script src="../ASSETS/JS/administrador.js"></script>
</body>
</html>