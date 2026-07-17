with open('about.php', 'r') as f:
    content = f.read()

# Define start and end markers
start_marker = "<!-- ============================================\n         MILESTONE TIMELINE\n         ============================================ -->"
end_marker = "    </section>"

start_idx = content.find(start_marker)
if start_idx != -1:
    end_idx = content.find(end_marker, start_idx)
    if end_idx != -1:
        end_idx += len(end_marker)
        # Remove the section
        content = content[:start_idx] + content[end_idx:]

        with open('about.php', 'w') as f:
            f.write(content)
        print("Timeline section removed successfully.")
    else:
        print("End marker not found.")
else:
    print("Start marker not found.")
