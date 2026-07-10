#!/bin/bash
set -e

# Desactivar los MPM que causan conflicto
a2dismod mpm_event 2>/dev/null || true
a2dismod mpm_worker 2>/dev/null || true
a2dismod mpm_prefork 2>/dev/null || true

# Activar únicamente prefork
a2enmod mpm_prefork

# Iniciar Apache
exec apache2-foreground