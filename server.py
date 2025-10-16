#!/usr/bin/env python3
"""
Simple HTTP server for Logicamp design preview
Serves static files on port 8001
"""

import http.server
import socketserver
import os

PORT = 8001
DIRECTORY = "/app"

class MyHTTPRequestHandler(http.server.SimpleHTTPRequestHandler):
    def __init__(self, *args, **kwargs):
        super().__init__(*args, directory=DIRECTORY, **kwargs)
    
    def end_headers(self):
        # Enable CORS
        self.send_header('Access-Control-Allow-Origin', '*')
        self.send_header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
        self.send_header('Access-Control-Allow-Headers', 'Content-Type')
        super().end_headers()

if __name__ == '__main__':
    os.chdir(DIRECTORY)
    
    with socketserver.TCPServer(("0.0.0.0", PORT), MyHTTPRequestHandler) as httpd:
        print(f"✅ Serveur démarré sur le port {PORT}")
        print(f"📂 Répertoire: {DIRECTORY}")
        print(f"🌐 Accès: http://0.0.0.0:{PORT}")
        print(f"🚀 Preview disponible!")
        print("\nAppuyez sur Ctrl+C pour arrêter le serveur\n")
        
        try:
            httpd.serve_forever()
        except KeyboardInterrupt:
            print("\n\n⛔ Serveur arrêté")
            pass
