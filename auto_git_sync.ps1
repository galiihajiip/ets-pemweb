# Auto Git Push Script for KOENCHIPS
# Run this script in PowerShell to automatically commit and push changes

$interval = 30 # Interval in seconds
$branch = "main"

Write-Host "--- KOENCHIPS Auto-Git-Push Started ---" -ForegroundColor Green
Write-Host "Monitoring changes every $interval seconds..."

while ($true) {
    # Check if there are any changes
    $status = git status --porcelain
    
    if ($status) {
        $timestamp = Get-Date -Format "yyyy-MM-dd HH:mm:ss"
        Write-Host "[$timestamp] Changes detected! sync-ing to GitHub..." -ForegroundColor Yellow
        
        git add .
        git commit -m "Auto-sync: $timestamp"
        git push origin $branch
        
        if ($LASTEXITCODE -eq 0) {
            Write-Host "[$timestamp] Successfully pushed to GitHub." -ForegroundColor Green
        } else {
            Write-Host "[$timestamp] Error: Failed to push." -ForegroundColor Red
        }
    }
    
    Start-Sleep -Seconds $interval
}
