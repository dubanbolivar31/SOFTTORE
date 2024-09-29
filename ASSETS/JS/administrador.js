let totalGastos = 154000000; // Valor inicial de los gastos

// Función para calcular el total de las facturas
function calcularTotalFacturas() {
  const agua = parseInt(document.querySelector('.bill-card:nth-child(1) .bill-amount').textContent.replace(/\$|\.|,/g, '')) || 0;
  const energia = parseInt(document.querySelector('.bill-card:nth-child(2) .bill-amount').textContent.replace(/\$|\.|,/g, '')) || 0;
  const gas = parseInt(document.querySelector('.bill-card:nth-child(3) .bill-amount').textContent.replace(/\$|\.|,/g, '')) || 0;

  // Sumar los montos
  return agua + energia + gas;
}

// Función para actualizar el total de las facturas y el pago pendiente
function actualizarPagoTotal() {
  const total = calcularTotalFacturas();

  // Actualizar el total en la tarjeta de pago
  document.querySelector('.payment-card .amount').textContent = `$${total.toLocaleString()}`;

  // Comprobar si el total es 0
  const payNowBtn = document.querySelector('.pay-now-btn');
  const message = document.querySelector('.no-bills-message');

  if (total === 0) {
    payNowBtn.disabled = true; // Deshabilitar botón
    if (!message) {
      document.querySelector('.payment-card').insertAdjacentHTML('beforeend', '<br><br><p class="no-bills-message">Todas las facturas están pagas.</p>');
    }
  } else {
    payNowBtn.disabled = false; // Habilitar botón
    if (message) message.remove(); // Eliminar mensaje si existe
  }
}

// Función para actualizar los gráficos y gastos
function actualizarGraficos(totalPagado) {
  // Sumar el total pagado a los gastos
  totalGastos += totalPagado;

  // Actualizar gráfico circular
  pieChart.data.datasets[0].data[1] = totalGastos; // Actualizar gastos
  pieChart.update();

  // Sumar gastos al mes de octubre (índice 9)
  const monthIndex = 9; // Octubre
  barChart.data.datasets[1].data[monthIndex] += totalPagado; // Sumar gastos del mes de octubre
  barChart.update();

  // Actualizar el valor en el HTML
  document.getElementById('totalGastos').textContent = `Gastos: $${totalGastos.toLocaleString()}`;
}

// Inicializar el total de pago al cargar la página
actualizarPagoTotal();

// Gráfico circular - Ingresos vs Gastos
const ctxPie = document.getElementById('pieChart').getContext('2d');
const pieChart = new Chart(ctxPie, {
  type: 'pie',
  data: {
    labels: ['Ingresos', 'Gastos'],
    datasets: [{
      data: [221000000, totalGastos],
      backgroundColor: ['#1e9900', '#ff4d4d'],
      hoverOffset: 4
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'bottom',
      }
    }
  }
});

// Gráfico de barras - Ingresos vs Gastos Anual
const ctxBar = document.getElementById('barChart').getContext('2d');
const barChart = new Chart(ctxBar, {
  type: 'bar',
  data: {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre'],
    datasets: [{
      label: 'Ingresos',
      data: [10000000, 5000000, 22000000, 28000000, 30000000, 32000000, 5000000, 9000000, 50000000, 30000000],
      backgroundColor: '#1e9900'
    }, {
      label: 'Gastos',
      data: [12000000, 15000000, 13000000, 16000000, 18000000, 17000000, 10000000, 30000000, 11000000, 11000000],
      backgroundColor: '#ff4d4d'
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      }
    }
  }
});

// Modal de Confirmación de Pago
const payNowBtn = document.querySelector('.pay-now-btn');
const modal = document.getElementById('modalPago');
const closeModalBtn = document.querySelector('.close');

payNowBtn.addEventListener('click', function() {
  const totalFacturas = calcularTotalFacturas();
  modal.querySelector('p').textContent = `¿Estás seguro de que deseas realizar este pago de $${totalFacturas.toLocaleString()}?`;
  modal.style.display = "flex";
});

closeModalBtn.addEventListener('click', function() {
  modal.style.display = "none";
});

document.getElementById('confirmarPago').addEventListener('click', function() {
  const totalFacturas = calcularTotalFacturas(); // Obtener el total de facturas
  alert('¡Pago realizado con éxito!');

  // Establecer las facturas y el pago pendiente en $0
  const billCards = document.querySelectorAll('.bill-card .bill-amount');
  billCards.forEach(card => card.textContent = '$0');

  // Actualizar gráficos con el total pagado
  actualizarGraficos(totalFacturas);

  // Actualizar pago total
  actualizarPagoTotal();

  modal.style.display = "none";
});

// Cerrar el modal al hacer clic fuera de él
window.onclick = function(event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
};

// Inicializar el total de pago al cargar la página
actualizarPagoTotal();