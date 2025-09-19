#!/bin/bash

# Paso 1: Actualizar el código
echo "📥 Haciendo git pull..."
git pull origin main

# Paso 2: Instalar dependencias
echo "📦 Instalando dependencias..."
npm install

# Paso 3: Compilar el proyecto
echo "🔨 Ejecutando build de producción..."
npm run build

# Paso 4: Crear o actualizar el archivo .htaccess en dist/
echo "🛠️ Configurando .htaccess para Vue Router..."
cat > dist/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
  RewriteEngine On
  RewriteBase /
  RewriteRule ^index\.html$ - [L]
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteRule . /index.html [L]
</IfModule>
EOF

# Paso 5: Establecer permisos correctos
echo "🔐 Asignando permisos..."
chown -R www-data:www-data /var/www/html
chmod -R 755 /var/www/html

# Paso 6: Reiniciar Apache
echo "🚀 Reiniciando Apache..."
systemctl restart apache2

echo "✅ DEPLOY COMPLETADO EXITOSAMENTE"
