<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <style>
body {
  font-family: 'Segoe UI', sans-serif;
  margin: 0;
  background-color: #f0f0f0;
}

.dashboard-container {
  display: flex;
  height: 100vh;
}

.sidebar {
  background-color: #2b2b2b;
  color: white;
  width: 250px;
  padding: 20px;
  font-size: 1.4rem;
}

.sidebar ul {
  list-style: none;
  padding: 0;
}

.sidebar ul li {
  margin: 20px 0;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 10px;
  transition: color 0.2s ease;
}

.sidebar ul li:hover {
  color: #ccc;
}

.sidebar .active {
  font-weight: bold;
  color: #ffd700;
}

.admin-info {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 1.4rem;
  margin-bottom: 2rem;
}

.avatar {
  width: 40px;
  height: 40px;
  background-color: #444;
  border-radius: 50%;
}

.logout {
  display: block;
  margin-top: 2rem;
  color: white;
  text-decoration: none;
  font-size: 1.3rem;
  transition: color 0.2s ease;
}

.logout:hover {
  color: #ccc;
}

.main-content {
  flex-grow: 1;
  padding: 20px;
  background-color: white;
  overflow-y: auto;
}

header {
  display: flex;
  align-items: center;
  gap: 1rem;
  flex-wrap: wrap;
  margin-bottom: 1rem;
}

header input,
header button {
  font-size: 1.3rem;
  padding: 0.5rem;
}

header input {
  width: 750px;
}

header button {
  padding: 0.5rem 1rem;
  cursor: pointer;
}

.dashboard-header {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  margin-bottom: 1.5rem;
}

.dashboard-header h1 {
  font-size: 2.2rem;
  font-weight: bold;
}

.dashboard-header p {
  font-size: 1.2rem;
  color: #666;
  margin-top: 0.5rem;
}

.metrics {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-bottom: 2rem;
}

.card {
  flex: 1 1 calc(20% - 20px);
  min-width: 200px;
  padding: 30px;
  border-radius: 10px;
  color: white;
  font-size: 1.5rem;
  font-weight: bold;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.card span {
  font-size: 1.6rem;
}

.blue { background-color: #007bff; }
.gold { background-color: #b8860b; }
.green { background-color: #28a745; }
.red { background-color: #dc3545; }
.teal { background-color: #20c997; }

.quick-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
  margin-bottom: 2rem;
}

.quick-actions button {
  padding: 20px 30px;
  border: 1px solid #ccc;
  background: white;
  border-radius: 12px;
  cursor: pointer;
  font-size: 1.4rem;
  font-weight: bold;
  transition: 0.3s ease;
  min-width: 200px;
}

.quick-actions button:hover {
  background-color: #f2f2f2;
}

  </style>
</head>
<body>
<div class="dashboard-container">
  <aside class="sidebar">
    <div class="admin-info">
      <div class="avatar"></div>
      <p>👤 Admin</p>
    </div>
    <nav>
      <ul>
        <li class="active">📊 Dashboard</li>
        <li>📦 Inventory</li>
        <li>📈 Sales Reports</li>
        <li>📞 Contact Suppliers</li>
        <li>↩️ Refunds & Returns</li>
        <li>🗂️ Access Logs</li>
      </ul>
      <a href="../pages/logout.php" class="logout">🚪 Log out</a>
    </nav>
  </aside>

        <a href="../pages/logout.php" class="logout">Log out</a>
      </nav>
    </aside>

    <main class="main-content">
      <!-- Top header with search and notification -->
      <header>
        <input type="search" placeholder="Search...">
        <button>🔔</button>
      </header>

      <!-- Dashboard title and Today's Report beside it -->
      <section class="dashboard-header">
        <h1>Dashboard</h1>
        <p>A quick data overview of the inventory</p>
        <select>
          <option>Today's Report</option>
        </select>
      </section>

      <section class="metrics">
        <div class="card blue">Total Customer: <span>20</span></div>
        <div class="card gold">Total Invoice: <span>15</span></div>
        <div class="card green">Total Product: <span>156</span></div>
        <div class="card red">Total Supplier: <span>10</span></div>
        <div class="card teal">Out of Stock: <span>8</span></div>
      </section>

      <section class="quick-actions">
        <button>Create New Invoice</button>
        <button>Business Tips</button>
        <button>Add New Products</button>
        <button>Manage Users</button>
        <button>Sales Report</button>
        <button>Add New Supplier</button>
      </section>
    </main>
  </div>
</body>
</html>
