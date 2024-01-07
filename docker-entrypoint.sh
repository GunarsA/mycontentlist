#!/bin/sh

# Function to pass signals to php-fpm
handle_signal() {
  signal=$1
  echo "Received signal: $signal"
  kill "-$signal" "$php_fpm_pid"
  wait "$php_fpm_pid"
  exit $?
}

# Set signal handlers
trap 'handle_signal QUIT' QUIT

# Run pre-execution commands
echo "Running some pre-execution commands..."
npm run build # Add any other pre-execution commands here

# Start php-fpm in the background and store its PID
php-fpm &
php_fpm_pid=$!

# Wait for php-fpm to finish
wait "$php_fpm_pid"
exit $?
