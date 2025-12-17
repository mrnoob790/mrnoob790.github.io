from http.server import BaseHTTPRequestHandler, HTTPServer

class handler(BaseHTTPRequestHandler):
    def do_GET(self):
        self.send_response(200)
        self.send_header('Content-Type', 'text/html; charset=utf-8')
        self.send_header('Content-Security-Policy', 'sandbox allow-popups')
        self.end_headers()

        html = """<!DOCTYPE html>
        <html>
        <body>
        <h3>CSP Sandbox Test</h3>

        <p>Alert below SHOULD be blocked:</p>
        <script>alert(1)</script>

        <p>Click the link below. SHOULD NOT download (because allow-downloads is NOT present):</p>

        <a href="intent://github.com/r-lib/zip/archive/refs/heads/main.zip#Intent;scheme=https;package=company.thebrowser.arc;end">
            CLICK HERE (intent download)
        </a>
        </body>
        </html>
        """

        self.wfile.write(html.encode("utf-8"))

with HTTPServer(('', 8000), handler) as server:
    print("Server running on http://0.0.0.0:8000")
    server.serve_forever()
